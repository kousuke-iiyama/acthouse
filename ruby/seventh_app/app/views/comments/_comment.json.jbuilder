json.extract! comment, :id, :title, :comment, :created_at, :updated_at
json.url comment_url(comment, format: :json)