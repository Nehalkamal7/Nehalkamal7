# all py lang

# print ('i hate f')
# print ("i hate f")
# basics=================================================================================================
# it does'nt matter "" or ''
# = means assign
# (true false) called booleans
# strings is a datatype which contains series of characters it must right between '' or " "
# there is no spaces in lang so if we need space we put (nehal_kamal)
# we can't use strings in any sort of math
# int can't use in '' or ""  its just number
# we can't combine between diff datatypes
# float is a datatype which contain decimal nums
# flaot can't use '' or " " its just a decimal num
# boolean is the variable that can only store (true false)
# boolean can't use '' or " "




# variables===============================================================================================
# means container for value the value can be any type
# ex

# first_name = 'nehal'
# last_name = 'edeib'
# full_name = first_name + ' ' + last_name   combination between 1st variable and space (' ') and 2nd variabe
# print('hello '+name)     here we combine between strings 
# print(type(name))           here the output will be the type of variable (string here)
# print (full_name)             here the output will be nehal edeib


# ex on int datatype

# age = 21
# age = age + 1     ==    age += 1    it will give me the same output
# print (age)
# print (type(age))        here the output will be (int) datatype of 21
# print('your age is: '+ str(age))   here we add (str (int)) to combine between string and other one


# ex on float datatype

# height = 164.5
# print (height)  all same as int but in decimal way


# ex on boolean datatype

# fuck = False
# duck = True
# print (duck)    the output here will be true
# print(fuck)       here false
#  type as int and float 
# combination as them too 


# multiple assighment=========================================================================================================================
# allows us to assign multiple variables at same time in one line 

# # ex 
# name = 'nehal'
# age = 20
# attractive = True
# same as 
# name, age, attractive = 'nehal', 20 , True
# then print (name)
#      print (age)
#      print (attractive)
# if they are same datatype and same value 
# then its just           age = dog = nephew = 20



# string methods============================================================================================================================
# name = 'nehal kamal edeib'

# print(len(name))       here the output will be 17 bc (len) count numbers of characters 
# print (name.find('n'))   here the output is 0 bc (.find) find me the index of chars and index in lenght start with 0
# print(name.capitalize())    capitalize to make chars capital but here bc there is spaces it will capital first char only (Neh...so on)
# print(name.upper())      upper to make the whole sentence with capital chars (NEHAL KAMAL EDEIB)
# print(name.lower())         lower to make the whole sentence small chars
# print(name.isdigit())      isdigit only response with true if inside the str is a digit (123) or false in this bc inside str is myname
# print (name.isalpha())       isalpha only respo with rue if inside str is only alpha (nehalkamal) or false in this bc inside str space (  )
# print (name.count('a'))      count to count how many of these char (a) in the whole str 
# print (name.replace('a','o'))   replacing chars so the output is (nehol komol edeib)
# print (name*3 )         it will give my name three times in the output



# type casting================================================================================================================================
# means convert datatype of value to another datatype

# ex 

# x=1
# y=2.5
# z='3'
# converting
# y= int (y)
# z= int (z) here i convert them totaly 
# x=float (x)
# then print 

# or 
# print (int(y))  that is just once y will be int and then go back float



# user input===================================================================================================================================
# its just input func 

# # ex 
# name = input ('what is your name ?:')
# age = int(input('and what is your age !:'))
# hieght = float (input('and your hieght ?:'))

# print ('welcome '+ name + ' iam nehal')
# print ('ooh you are ' + str (age) + ' you are such a baby')
# print ('WOW ' + str(hieght) + ' really!!')




# math fuctions========================================================================================================
# import math
# pi = 3.14
# x=1
# y=2
# z=3

# print(round(pi))    round means that the output will be the nearest int num of the num in this will be (3)
# print(math.ceil(pi))  ceil means that the output will be the uppper int num of the num in this will be (4) 
# print (math.floor(pi))  floor means that the output will be the lower int num of the num in this will be (3)
# print (abs(pi))           abs means absolute of the number (how far the num from zero) in this will be (3.14)
# print(pow(pi,2))        pow means it will be put the num to the power i put in this will be (3.14^2 = 9.8596)
# print (math.sqrt(num))    sqrt means the square root of num
# print(max(x,y,z))        max means the maximum num of the nums i put in it and in this it will be z=3
# print(min(x,y,z))         min means minimum num of the nums i put in it and in this it will be x=1




# string slicing =======================================================================================================
# means create a substring by extracting elements from another string 
                            #  by using    indexing[] or slice()
# indexing==========================
# ex 
# name = 'nehal kamal'

# first_name = name[0:5]            same as [:5]
# last_name = name [6:]              same as[6:11]
# funky_name = name[0:11:2]           [start:stop:step]  here it will start from zero then skip two char then continue 
        # it also can be [::2] and it will be the same                   #   the output will be nhlkml
        # it also can be [::-2]     it will be same but reversed        lmklhn

# print(first_name,last_name,funky_name)


# slice================================
# # ex 
# name = 'nehal kamal'
# name_2 = 'hames kamal'
# slice = slice(2,-4,)     i can apply it on more than one
# print (name [slice])     output hal k
# print (name_2 [slice])   output mes k 




# if statement===========================================================================================================

# age = input ('how old are u ? :::')

# if age >= 18 :
#     print ('you are an adult!')

# elif age >= 40 :
#     print ('you are a man !')

# elif age < 18 :
#     print ('you are child ^^')

# elif age == 100 :
#     print ('you are a century olddd')

# else :
#     print ('i can not define u ???')




# logigal operators=======================================================================================================
# ( and , or , not)  used two check two or more conditional statments

# end , or ex

# temp = int (input ('what is the temprature today? '))

# if temp >= 0 and temp <= 30:  both condition must be true in and 
    # print (' the temprature is good today\n go outside')

# if temp <0 or temp > 30:       it can be only one is true in or
#     print ('the temprature is bad today\n stay at home')

# not ex 

# if not (temp <0 or temp > 30):        it convert the true to false and the false to true     here it will print 1  
#     print ('the temprature is bad today\n stay at home')    2
# elif not (temp >= 0 and temp <= 30):  
#     print (' the temprature is good today\n go outside')    1   here it will print 2




# while loop=============================================================================================================
# it will repeat until it becomes false unlimited
# ex 
# infinite loop 

# while 1==1:
#     print ('help ! iam stuck in infinite loop')

# ex easy loop 

# name =''

# while len(name)==0:
#     name = input ('enter your name')

# print ('hello '+name)






# for loop==============================================================================================================
# limited 

# ex
 
# for i in range (10):
#     print (i)      here it will print from zero to 9  (ending num in range not there)

# for i in range (50,100):
    # print (i+1)    here it will print from zero to hundred (ending num in range in there)

# for i in range (50,101,2):     i can also write it (50,100+1,2)
    # print (i)        here it will print from zero to the hundred but jumbing two every time (02468)

# import time         here is time function 
# for seconds in range (10,0,-1):    here i want to count downly -1
    # print (seconds)
    # time.sleep (1)      here means to wait 1 sec between counting nums
# print ('happy new year!')




# nested loop ===========================================================================================================
# means loops inside each other 
# in this the 'inner loop' will finish all inside it before the 'outer loop' finishing one

# ex to make a rectangle with symbols

# width = int (input ('what is the width of ur rectangle?'))
# length = int (input ('what is the lenght of ur rectangle?'))
# symbol = input('what is the symbol of ur rectangle?')

# for w in range (width):
#     for l in range (length):
#         print (symbol , end='')   end =' '     to print in new line 
#     print()





# loop control============================================================================================================

# break = use to terminate the loop entirly
# continue = skip the next step in loop 
# pass = does nothing and it acts as placeholder

# while True :
    # name = input ('enter your name')
    # if name != '':      != means not equal
        # break     here we will still in the loop but when the user enter a name the break will gonna take us out of loop


# phone_num='0123-456-78-91'
# for i in phone_num:
#     if i == '-':   
#         continue here it will pass every - in the phone num 
#     print(i,end='')  here end = ' '  to print the num together in one line so the output is 01234567891


# for i in range (1,21):
#     if i == 13 :
#         pass
#     else :
#         # print(i)   here it will print nums from 1 to 20 except num(13)
#         print(i)





# lists==============================================================================================================================
# used to store multiple items in single variable

# family = ['nehal', 'hames', 'mohamed', 'manal', 'kamal']  
# family[1]='pizza'     here will replace hames with pizza 

# print (family)      output will be ['nehal', 'pizza', 'mohamed', 'manal', 'kamal']

# for x in family:
#     print (x)       out put will be nehal
                                    # pizza
                                    # mohamed
                                    # manal
                                    # kamal

# family.clear()                       clear will remove everything in the list 
# family.sort()                      sort will sort the list alphabetically
# family.insert(0,'hoor')          insert will insert the item i put in it to the list in the index i put in it 
# family.pop()                   pop means remove the last item in list 
# family.remove('hames')        remove means remove that item from list 
# family.append('hames')     append means add another item to list 




# 2D lists=====================================================================================================================================
# means a list of a lists

# parents = ['kamal','manal']
# siblings = ['mohamed','hames']
# friends = ['hoor','mayar']

# people_iknow = [parents , siblings , friends ]
# print (people_iknow)      it will print three lists together
# print(people_iknow[0][1])   it will print from parents manal  (manal)   




# tuple=========================================================================================================================================
# means collection in order and      cannot change      , used to group together related data
# we use here( )  insted of []

# me = ('nehal',20,'female') 
# print (me)                it will print the tuple
# print (me.count('nehal'))  it will print how many nehal repeats in tuple = 1
# print (me.index('female'))    it will print the index of female in tuple = 2

# for x in me :
    # print(x)    it will print them above each other

# if 'nehal' in me :
    # print("nehal is here")




# sets =========================================================================================================================================
# unordered , unindexed , no duplicative values
# we use { }

# parents = {'kamal','manal','kiko'}
# siblings = {'mohamed','hames','kiko'}

# family = parents.union(siblings)     here combination between two sets
# parents.add('hhh')                   add item i put in it
# parents.remove ('kamal')              remove item i detect
# parents.clear ()                    will remove whole set
# siblings.update(parents)            will put items of parents in siblings 
# siblings.difference(parents)         will print the items in siblings which is not in parents
# siblings.intersection(parents)        will print the items in siblings which is common in parents




# dictionary ====================================================================================================================================
# unordered , changeable , have a key:value 
# so insted of index in printing i will use the key to print the value of it
# we use { ' ' : ' ' , ' ' : ' ' ...........}

# siblings = {'nehal' : 'last' , 'hames' : 'middle' , 'mohamed' : 'first'}
# print(siblings['hames'])   here it will print middle
# print(siblings.get('manal')) here it will see if manal in my dictionary so it will print none
# print(siblings.keys())          here it will print only keys (nehal, hames, mohamed)
# print(siblings.values())         here it will only print values (last, middle , first)  
# print(siblings.items())          here it will print all items in my dictionary

# siblings.update({'kamal' : 'father'})    here it will add it to my dictionary kamal as key and father as value
# siblings.update({'nehal' : 'bigger'})     here it will change (last) with (bigger)

# siblings.pop('mohamed')                 here it will remove mohamed and its value from my dictionary
# siblings.clear()                          here it will remove the whole dictionary

# for key,value in siblings.items():
    # print (key,value)   here it will print all items upove each other



# index operator================================================================================================================================
# used to access element (str,list,tuples)
# we will use [index of item ] after str or list or tuple to change in it

# name='nehal kamal*'

# first_name= name [:5].upper()  here it will make nehal to NEHAL
# last_name= name[6:].lower()    here it will low any capital letter
# last_char= name[-1]

# print(first_name)
# print(last_name)
# print(last_char)



# functions =====================================================================================================================================
# to create a function its just def name():         def means define that mean i define that function to python

# def me(first_name , last_name , age):
#     print('hello '+ first_name +' '+last_name)
#     print('your age is '+str(age))
#     print('good work !')

# me('nehal','kamal',20)    so here i can change nehal kamal 20 to anything else but same parameters as i def the function ( , , )



# returnt statements====================================================================================================================

# def multiply (num1,num2):
#     result = num1 * num2
#     return result

# print (multiply(2,4))



# keyword arguments =====================================================================================================================
# positions doesn't matter 

# def hello (first,middle,last):
#     print ('hello '+first+' '+middle+' '+last)

# hello (last='fouad',middle='kamal',first='nehal')


# nested function calls=================================================================================================================
# function calls inside functions

# print(round(abs(float(input('enter a positive num : ')))))  
# same as 
num = input ('enter a positive num : ')
num = float (num)
num = abs (num)
num = round (num)
print (num)


