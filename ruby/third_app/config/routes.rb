Rails.application.routes.draw do
  resources :boards do
  resources :comments
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end

# root to: 'board#index'
end
