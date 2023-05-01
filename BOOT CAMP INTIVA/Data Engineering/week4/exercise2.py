before = [[1, 2], [3, 4], [5, 6]]
after = []
# for sublist in before:
#     after.extend(sublist)
for sublist in before:
    for numb in sublist:
        after.append(numb)
print(after)