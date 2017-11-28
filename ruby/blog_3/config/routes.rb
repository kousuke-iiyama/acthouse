Rails.application.routes.draw do
  # get 'password_resets/create'

  # get 'password_resets/edit'

  # get 'password_resets/update'

  # get 'user_sessions/new'

  # get 'user_sessions/create'

  # get 'user_sessions/destroy'
get "users/index"
get "users/show/:username" => "users#show"


resources :user_sessions
get 'login' => 'user_sessions#new',as: :login
post 'logout' => 'user_sessions#destroy',as: :logout 
resources :users
resources :posts do
resources :comments,only: [:create,:destroy]
resources :password_resets
end
root to: 'posts#index'
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
