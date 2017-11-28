class CreateCommentsController < ApplicationController
  before_action :set_create_comment, only: [:show, :edit, :update, :destroy]

  # GET /create_comments
  # GET /create_comments.json
  def index
    @create_comments = CreateComment.all
  end

  # GET /create_comments/1
  # GET /create_comments/1.json
  def show
  end

  # GET /create_comments/new
  def new
    @create_comment = CreateComment.new
  end

  # GET /create_comments/1/edit
  def edit
  end

  # POST /create_comments
  # POST /create_comments.json
  def create
    @create_comment = CreateComment.new(create_comment_params)

    respond_to do |format|
      if @create_comment.save
        format.html { redirect_to @create_comment, notice: 'Create comment was successfully created.' }
        format.json { render :show, status: :created, location: @create_comment }
      else
        format.html { render :new }
        format.json { render json: @create_comment.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /create_comments/1
  # PATCH/PUT /create_comments/1.json
  def update
    respond_to do |format|
      if @create_comment.update(create_comment_params)
        format.html { redirect_to @create_comment, notice: 'Create comment was successfully updated.' }
        format.json { render :show, status: :ok, location: @create_comment }
      else
        format.html { render :edit }
        format.json { render json: @create_comment.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /create_comments/1
  # DELETE /create_comments/1.json
  def destroy
    @create_comment.destroy
    respond_to do |format|
      format.html { redirect_to create_comments_url, notice: 'Create comment was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_create_comment
      @create_comment = CreateComment.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def create_comment_params
      params.require(:create_comment).permit(:name, :comment)
    end
end
