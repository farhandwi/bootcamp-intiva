input = ['1', '2', '3']
numbers = []
for string in input:
    numbers.append(int(string))
print (numbers)
result = 0
for n in numbers:
    result = result + n
print("their sum is", result)