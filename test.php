import random

print("What is your name?") 
name = input().title() 
class_name = input("Which class do you wish to input results for? ")
print (name, ", Welcome to the arithmetic test!") 
score = 0  
question = 0 
while question < 10: 
    operator = random.randint(1,4)
    num1 = random.randint(1,25)
    num2 = random.randint(1,25)
    if operator == 1: 
        print("What is", num1, "+", num2,"?")
        while True:
            try:
                ans = int(input("")) 
            except ValueError: 
                print ("That is not a valid answer")
        
        ans = num1 + num2

    elif operator == 2:
        print("What is", num1, "*", num2,"?")
        while True:
            try:
                ans = int(input("")) 
            except ValueError: 
                print ("That is not a valid answer")
        ans = num1 * num2
 
    elif operator == 3:
        if num2 > num1:
            print("What is", num2, "/", num1,"?")
            while True:
                try:
                    ans = int(input("")) 
                except ValueError: 
                    print ("That is not a valid answer")
            ans = num2 / num1
        else:
            print("What is", num1, "/", num2,"?")
            while True:
                try:
                    ans = int(input("")) 
                except ValueError: 
                    print ("That is not a valid answer") 
            ans = num1 / num2

    else: 
        print("What is", num1, "-", num2,"?")
        while True:
            try:
                ans = int(input("")) 
            except ValueError: 
                print ("That is not a valid answer")
        ans = num1 - num2
        
    while True:
        try:
            user_ans = int(input()) 
        except ValueError: 
            print ("That is not a valid answer")
            continue 
        if user_ans == ans: 
            print("Correct")
            score += 1
        else: 
            print("Incorrect")
    
    
    
        question += 1

print("Well done", name, "you scored", score, "/10") 


class_name = class_name + ".txt"    

file = open(class_name , 'a')   
name = (name)
file.write(str(name + " : " ))
file.write(str(score))
file.write('\n')
file.close()   

viewscore = input("Do you wish to view previous results for your class").lower()

if viewscore == "yes".lower():
    f = open(class_name, 'r')
    file_contents = f.read()
    print (file_contents)
    f.close()

elif viewscore != "yes".lower():
    print ("Press any key to exit")
    ex = input ("")
    os._exit(0)
