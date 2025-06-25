import random,os
def start_turn():
    
    cond = True
    while cond:
        inp = input("press enter to start your turn")
        if inp == '':
            cond = False

def end_turn():
    cond = True
    while cond:
        inp = input("press enter to end your turn")
        if inp == '':
            cond = False
    os.system('cls')
    
screw_dic = {'1':[1,4],
             '2':[2,4],
             '3':[3,4],
             '4':[4,4],
             '5':[5,4],
             '6':[6,4],
             '7':[7,4],
             '8':[8,4],
             '9':[9,4],
             '10':[10,4],
             '+20':[20,3],
             'khod w hat':[10,3],
             'bsra':[10,3],
             'ka3b dair':[10,3],
             'red screw ':[25,3],
             'screw driver':[0,3],
             'khod bs':[10,1],
             'swap and see':[10,1],
             '-1':[-1,1],  
            }
def main_loop(players,table,used_cards,i,last_table_card):
    global table_card
    table_card = last_table_card
    x = input()
    lst = ['1','2','3','4']
    if x in lst:
        if x == '1':
            the_card = table[0]
            table.pop(0)
            print('the card is', the_card)
            print('1. put down the card ')
            print('2. exchange the card')
            x1 = input()
            if x1 == '1':
                table_card = the_card
                used_cards.append(table_card)
                cards_powers(players,the_card,i,used_cards)
                
            elif x1 == '2':
                print('number of cards',len(players[i]))
                y = int(input('choose the index of the card you want to exchange'))
                y -= 1
                player_cards = players[i]
                card = player_cards[y]
                player_cards[y] = the_card
                players.update({i:player_cards})
                table_card = card
                used_cards.append(table_card)
                table.pop(0)            
        elif x == '2':
            if table_card != '':
                print('number of cards',len(players[i]))
                y = int(input('choose the index of the card you want to exchange'))
                y -= 1
                player_cards = players[i]
                card = player_cards[y]
                player_cards[y] = table_card
                players.update({i:player_cards})
                print(used_cards)
                used_cards.remove(table_card)
                table_card = card
                used_cards.append(table_card) 
                print('table card is ',table_card)
            else:
                print('no table card choose another option')
                main_loop(players,table,used_cards,i,table_card)
        elif x == '3':
            if table_card != '':
                print('number of cards',len(players[i]))
                y = int(input('choose the index of the card you want to exchange'))
                y -= 1
                if players[i][y] == table_card:
                    print("congratulations")
                    player_cards = players[i]
                    card = player_cards[y]
                    used_cards.append(card)
                    player_cards = player_cards.pop(y)
                    table_card = card
                    players.update({i:player_cards})
                else:
                    print('bad luck take the table card')
                    player_cards = players[i]
                    player_cards = player_cards.append(table_card)
                    used_cards.remove(table_card)
                    if len(used_cards) > 0:
                        table_card = used_cards[-1]
                    else:
                        table_card = ''
                    players.update({i:player_cards})
            else:
                print('no table card choose another option')
                main_loop(players,table,used_cards,i,table_card)
        elif x == '4':
            global continue_playing,screw_player,break_,last_turn
            last_turn = True
            continue_playing = False
            screw_player = i
            break_ = True
        end_turn()
    else:
        print('enter the right input')
        main_loop(players,table,used_cards,i,table_card)
def last_loop(players, table,i,used_cards):
    x = input()
    if x in ['1','2','3']:
        if x == '1':
            the_card = table[0]
            table.pop(0)
            print('the card is', the_card)
            print('1. put down the card ')
            print('2. exchange the card')
            x1 = input()
            if x1 == '1':
                table_card = the_card
                cards_powers(players,the_card,i,used_cards)
            elif x1 == '2':
                print('number of cards',len(players[i]))
                y = int(input('choose the index of the card you want to exchange'))
                y -= 1
                new = players[i]
                card = new[y]
                new[y] = the_card
                table.pop(0)
                players.update({i:new})
                table_card = card
        elif x == '2':
            if table_card != '':
                print('number of cards',len(players[i]))
                y = int(input('choose the index of the card you want to exchange'))
                y -= 1
                new = players[i]
                card = new[y]
                new[y] = table_card
                players.update({i:new})
                table_card = card
                print('table card is ',table_card)
            else:
                print('there is no table card choose another option')
                main_loop(players,table,used_cards,i,table_card)
        elif x == '3':
            if table_card != '':
                print('number of cards',len(players[i]))
                y = int(input('choose the index of the card you want to exchange'))
                y -= 1
                if players[i][y] == table_card:
                    print("congratulations")
                    new = players[i]
                    new = new.pop(y)
                    players.update({i:new})
                else:
                    print('bad luck take the table card')
                    new = players[i]
                    new = new.append(table_card)
                    players.update({i:new})
            else:
                print('there is no table card choose another option')
                main_loop(players,table,used_cards,i,table_card)
        end_turn()
    else:
        print('enter the right input')
        last_loop()

def cards():
    counter = 0
    cards =[]
    counts = []
    total_cards = []
    for i in screw_dic.keys():
        cards.append(i)
    for j in screw_dic.values():
        counts.append(j[1])
    for i in cards:
        for j in range(counts[counter]):
            total_cards.append(i)
        counter +=1
    random.shuffle(total_cards)
    return total_cards
def re_sort_cards(cards):
    random.shuffle(cards)
    return cards
def exchange(players,i):
    print(players.keys())
    x1 = input('choose a player')
    print('number of cards',len(players[x1]))
    y = int(input('choose the index of the card you want to exchange from the player'))
    print('number of cards',len(players[i]))
    y1 = int(input('choose the index of the card you want to exchange from your cards'))
    y -=1
    y1-=1
    new1 = players[x1]
    new2 = players[i]
    card1 = new1[y]
    card2 = new2[y1]
    new1[y] = card2
    new2[y1] = card1
    players.update({i:new2})
    players.update({x1:new1}) 
    return card1
def my_cards(x):
    my_cards = []
    table = x
    for i in range(4):
        my_cards.append(table[i])
        table.pop(0)
    return my_cards
def cards_powers(players,the_card,i,used_cards):
    global table_card
    if the_card == '7' or the_card == '8':
        print('number of cards',len(players[i]))
        y = int(input('choose the index of the card you want to see'))
        y -= 1
        print(players[i][y])
    elif the_card == '9' or the_card == '10':
        print(players.keys())
        x1 = input('choose a player')
        y = int(input('choose the index of the card you want to see'))
        y -= 1
        y -= 1
        print(players[x1][y])
    elif the_card == 'khod w hat':
        exchange(players,i)
    elif the_card == 'bsra':
        print('number of cards',len(players[i]))
        y = int(input('choose the index of the card you want to drop'))
        y -= 1
        new = players[i]
        card = new[y]
        new = new.pop(y)
        players.update({i:new})
        table_card = card
        used_cards.append(table_card)
    elif the_card == 'ka3b dair':
        for k in players.keys():
            print('choose a card you want to see from '+ k)
            print('number of cards',len(players[k]))
            x = input()
            players[k][x]
    elif the_card == 'khod bs':
        print(players.keys())
        x1 = input('choose a player')
        print('number of cards',len(players[i]))
        x2 = input('choose a card you want to gave')
        new = players[x1]
        new.append(players[i][x2])
        players.update({x1:new})
    elif the_card == 'swap and see':
        card = exchange(players,i)
        print('the card is:', card)
    return players,table_card
def screw(players):
    counter = 0
    for i in players.keys():
        for j in players[i]:
            counter += screw_dic[j][0]
        print('player ' +i ,counter)
def game():
    global table_card
    n = int(input('enter number of player'))
    continue_playing = True
    start = True
    table = cards()
    used_cards = []
    players = {}
    last_turn = False
    for i in range(n):
        players.update({input('Enter your name: '): my_cards(table)})
    table_card = table[0]
    used_cards.append(table_card)
    table.pop(0)
    while continue_playing:
        while len(table) > 0 and continue_playing :
            while start:
                for i in players.keys():
                    start_turn()
                    print(i,'cards in right: ')
                    print(players[i][2:4])
                    end_turn()
                start = False
            break_ = False
            for i in players.keys():
                start_turn()             
                print('table card', table_card)
                print (i +' choose an action')
                print('1. take a card from cards')
                print('2. exchange one of your cards with the table card')
                print('3. basr')
                print('4. Screw')
                main_loop(players,table,used_cards,i,table_card)
                if break_:
                    break
        table = re_sort_cards(used_cards)    
    if last_turn:
        last_turn_players = players.copy()
        last_turn_players.pop(screw_player)
        for i in last_turn_players.keys():
            start_turn()              
            print('table card', table_card)
            print (i +' choose an action')
            print('1. choose a card from cards')
            print('2. exchange one of your cards from table card')
            print('3. basr')
            last_loop(players,table,i,used_cards)
        screw(players)
try:
    game()
except:
    print('enter the right input')
    game()