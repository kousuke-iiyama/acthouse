json.extract! create_comment, :id, :name, :comment, :created_at, :updated_at
json.url create_comment_url(create_comment, format: :json)