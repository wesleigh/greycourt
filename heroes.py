heroes = ["Batman","WonderWoman","Superman","Spiderman","Jane","Superwoman"]

show_list(heroes)

while True:
    try:
        choice = int(input("Enter an index for the superhero you would like to change (0-5)"))
        break
    except ValueError:
            print("Oops that is not a number")
        
newHero = input("Which superhero will be joining the team?")

heroes[choice] = newHero

print(heroes)
