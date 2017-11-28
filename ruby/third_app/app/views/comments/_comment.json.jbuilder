json.extract! comment, :id, :title, :editor, :created_at, :updated_at
json.url comment_url(comment, format: :json)