input = raw_input("Please give a number")

if input.isNumeric()==True:
    residue = input/2
    if residue == 0:
        print("Number is even")
    else:
        print("Number is odd")
else:
    input = raw_input("Please give a number")