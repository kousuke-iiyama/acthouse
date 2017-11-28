class PasswordResetsController < ApplicationController
  def create
  	@user = User.find_by_email(params[:email])
    @user.deliver_reset_password_instructions! if @user
    redirect_to(root_path, :notice => 'Instructions have been sent to your email.')
  end

  def edit
  	set_token_user_from_params?
  end

  def update
  	 return if !set_token_user_from_params?
 
    @user.password_confirmation = params[:user][:password_confirmation]
 
    if @user.change_password!(params[:user][:password])
      redirect_to(root_path, :notice => 'Password was successfully updated.')
    else
      render :action => "edit"
    end
  end

private

def set_token_user_from_params?
      @token = params[:id]
      @user = User.load_from_reset_password_token(params[:id])
 
      if @user.blank?
        not_authenticated
        return false
      else
        return true
      end
    end

end
