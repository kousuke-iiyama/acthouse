
words = { 
  Japan: 'Tokyo', 
  Philippines: 'Manila',
  Germany: 'Berlin', 
  France: 'Paris', 
  Greece: 'Athens',
}

loop_count = 0
correct_count = 0

puts 'Answer the capital city'
words.each do |key, value|
  puts "#{key}: "
  answer = gets.chomp
  if answer == "stop"
    puts "interrupted"
    break
  elsif answer == value
    puts "correct!!"
    correct_count += 1
  else
    puts "False..."
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
puts "Your accuracy rate is #{correct_percentage}%!"















