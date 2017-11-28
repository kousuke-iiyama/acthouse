
words = { 
  Japan: 'Tokyo', 
  Germany: 'Berlin', 
  France: 'Paris', 
  Greece: 'Athens',
}

loop_count = 0
correct_count = 0

puts '首都を英語で答えてください'
words.each do |key, value|
  puts "#{key}: "
  answer = gets.chomp
  if answer == "stop"
    puts "中断しました"
    break
  elsif answer == value
    puts "正解です"
    correct_count += 1
  else
    puts "間違っています"
  end
  
  loop_count += 1
end

def percentage(a, b)
  if b == 0
    return 0
  end
  a * 100 / b
end

correct_percentage = percentage(correct_count, loop_count)
puts "正解率は#{correct_percentage}パーセントです"