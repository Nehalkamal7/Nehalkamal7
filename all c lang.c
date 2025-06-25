// all of C lang

// #include<stdio.h>
// #include<stdlib.h>
// #include<string.h>
// #define pi 3.14

// variables================================================================================================
// #include <stdio.h>

// int main()
// {
//     int x=0;       %d or %i
//     float y=0.5;   %f
//     char z='A';    %c

//     printf("%i , %f , %c",x ,y ,z);
//     return 0;
// }


// maths operations==========================================================================================
// #include <stdio.h>
// #include <stdlib.h>
// int main()
// {
//     int x=0;
//     float y=1.5;
//     int A=2;
//     float B=3;

//     x=x+2; same as x +=2;
//     y=y*3; same as y *=3;
//     A=A-1; same as A -=1;
//     B=B/3; same as B /=3;

//     printf("%d ,%f ,%d ,%f",x,y,A,B);
//     return 0;
// }


// ascii code ===============================================================================================
// #include <stdio.h>
// #include <stdlib.h>

// int main()
// {
//     int x=0;
//     float y=0.5;
//     char c; بيطبع قيمة الرقم 

//     c='A';  بيطبع من هنا الحرف نفسه

//     printf ("%d ,%c",c ,c);
//     return 0;

// }


// practice code arthmitic and ascii code ===================================================================
// 1=arthmitic
// #include <stdio.h>
// #include <stdlib.h>

// int main()
// {
//     float solution;
//     solution = (5*(5+3))/(6/2); هنا هيطلع الناتج انتجر ف لو عايزه يطلع فلوت ف لازم اخلي اي رقم ف 
// الكود يبقى فلوت ف هيبقى كدا (5.0*(5+3))/(6/2) خلينا ال 5=5.0

//     printf ("%f",solution);
//     return 0;
// }
 
//  2=ascii
// #include <stdio.h>
// #include <stdlib.h>

// int main()
// {
//     int x=1;
//     printf ("%c",x); هنا دا معناه اني عايزاه يطبعلي الحرف رقم 1
//      x++; هنا دا معناه اني عايزاه لما يخلص الرق اللي حطاه يدخل على الرقم اللي بعده 2
//     printf ("%c",x); %c=char of number i put
//      x++; 3
//     printf ("%c",x);
//      x++; 4
//     printf ("%c",x); 
//     x++;  و هكدا
//     printf ("%c",x);
//      x++;
//     printf ("%c",x);
//      x++;
//     printf ("%c",x);
//      x++;
// }


// take input from user=====================================================================================
// #include <stdio.h>
// #include <stdlib.h>

// int main()
// {
//     int x;
//     scanf("%d",&x); هنا السكان زي البرينت بس هنزود الاند و هي دي الهيدخلها اليوزر
//     printf("enter num , %d\n",x); هنا ال\n معناها انه يبدأ سطر جديد
//     return 0;
// }


// control statment (tools (if , for , while))===============================================================
// #include <stdio.h>
// #include <stdlib.h>
// ----------------------------------------------------------------------------------------------------------
// if
// int main()
// 
//         if(condition) هنا بكتب الشرط اللي لو اتحقق ف يكتبلي الكود اللي جوه {}
//         {
//             code;
//         }
        //      else دي ان لو ال اف متحققتش يطبع الكود اللي جوه دي
        //    {
        //     code;
        //    }
//   
//    return 0;
// }
// == معناها هل يساوي
// <> معناها اصغر او اكبر
// != معناها لا يساوي
// ex on if

// int main()
// {
//     int password =123;
//     int user;
//     scanf("%d",&user);

    
//         if (password==user)
//         {
//             printf("the password is correct");
//         }
//         else 
//         {
//             printf("the password is incorrect");
//         }
    
//    return 0;
// }
// ---------------------------------------------------------------------------------------------------------
// for loop  (initialization, condition , update)
// {
//     code;
// }
// first we see initialization then check the condition and if it false we will see the update and then start 
// again with the update putted in initialization then check the condition and when it becomes true the
// loop will end
// ex on for loop
// int main()
// {
//     int x;
//     scanf("%d",&x);
//     int result =1;
//     for (int i=x; i!=0; i--)
//     {
//         result =result * i;
//     }
//     printf("the answer is : %d ",result);
//     return 0;
// }
// ----------------------------------------------------------------------------------------------------------
// while 
// initialization
// while (condition)
// {
//     code;
//     update;
// }
// here we can count infinitly 
// while : checks a condition THEN executes a block of code if codition is true
// ex on while
// int main()
// {
//     int x;
//     scanf("%d",&x);
//     int result =1;
//     int i=x;
//     while(i!=0)
//     {
//         result = result * i;
//         i--;
//     }
//     printf("the answer is : %d ",result);
//     return 0;
// }

// ==========================================================================================================
// !   not
// ||  or    if i want any of two condition true
// &&  and   if i want the two condition true
// 1   true
// 0   false
// ==========================================================================================================

// break and continue 
// break means that in any loop if i want smthg to not be included in the loop
// then i will break it by break and 
// continue means that in any loop if i want specific condion it its true 
// then i want the loop to skip the rest of condition 
// continue : skips rest of code & force the next iteration of the loop
// break : exits the loop / switch

// ex on break and continue
// #include <stdio.h>
// #include <stdlib.h>
// int main()
// {
//     for (int i = 1; i<=20; i++)
//     {
//         if (i == 13)
//         {
//             continue;      here the loop will skip num 13
//         }
//         printf("%d\n", i);
//     }
//     return 0;
// }
// int main()
// {
//     for (int i = 1; i<=20; i++)
//     {
//         if (i == 13)
//         {
//             break;         here we will exit the loop at 12
//         }
//         printf("%d\n", i);
//     }
//     return 0;
// }

// do while and switch ========================================================================================

// do while : used once before checking condition if condition true then it will continue others 
// if not it will restart the loop
// switch : i will put my variable and at every moment for this variable i will put a case and 
// if the case is not true then i will put defalt
// dowhile : always executes a block of code once THEN checks the condition/
//switch and do while ex
// #include<stdio.h>
// #include<stdlib.h>
// int main()
// {
//         int userpassword , flag=0;
//         do
//         {
//                 scanf("%d",&userpassword);
//                 switch (userpassword)
//                 {
//                         case 123 :
//                                 printf("the password is correct\n");
//                                 flag=1;  دي هنا عشان اطلع من اللوب
//                                 break;
//                         case 456 :             
//                                 printf("the password is correct\n");
//                                 flag=1;
//                                 break;
//                         default :
//                                 printf("the password is incorrect\n");
//                                 break;
//                 }
//         }
//         while (flag == 0);
//         return 0;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
// }


// functions================================================================================================
// int main()         دي فانكشن اسمها ثابت و بتحتاج الاقواس اللي جنبها و علو بعض البرامج مش لازم الريترن 0

// float squaring(float a)   دي فانكشن فلوت عرفتها اني هشتغل فلوت و سميتها اي اسم
// {
//         float result = a *a; و هنا عرفتها اللي عايزه منها   
//         return result;
// }


// arrays===================================================================================================
// we use it if we need to input more than one data 
// ex
// #include<stdio.h>
// #include<stdlib.h>

// int main()
// {
//         int i;          دي عشان الفور لوب
//         int a[7] = {1,200,10,30,5,6,7} ;
//         or 
//         a[0] = 1
//         a[1] = 200
//         a[2] = 10
//         a[3] =  30
//         a[4] =  5
//         a[5] = 6
//         a[6] = 7 
//         or
//         if i have many variables we use for loop
//         for (i = 0; i<7; i++)
//         {
//                 a[i] = i+1;
//         }
//         for (i = 0; i<7; i++)     دي فور لوب تانيه عشان اطبع 
//         {
//                 printf("%d\t",a[i]);   ال \ت دا عشان يسيبلي مسافه بين كل رقم و التاني
//         }     
// }


// practice on arrays =========================================================================================
// user will input a 10 degrees and we will get the average of them
// #include<stdio.h>
// #include<stdlib.h>

// int main()
// {
//         int i;
//         float x[10];
//         for (i=0; i<10; i++)
//         {
//                 scanf("%f",&x[i]);
//         } 
//         float result = 0;
//         for (i=0; i<10; i++)
//         {
//                 result = result + x[i];
//         }
//         float m= result / 10;
//         printf("%f",m);
// }


// error types==============================================================================================
// syntax error : if i forgot (; , & % )and so on
// logical error : i got a output incorrect but the code runs btw
// run time error : it stops while running bc smthg comp cannot do it like (5/0)


// multi dimensional arrays=================================================================================
// smthg like tables 
// ex 
// int main()
// {
//         int a[3][2];
//         int i,j;
//         for (i=0; i<3; i++)
//         {
//                 for(j=0; j<2; j++)
//                 {
//                         scanf("%d",&a[i][j]);
//                 }        
//         }
//         for (i=0; i<3; i++)
//         {
//                 for(j=0; j<2; j++)
//                 {
//                         printf("%d\t",a[i][j]);
//                 } 
//                 printf("\n");       
//         }

// }


// strings==================================================================================================
// array of chars 
// char s[20]={'n','e','h','a','l','\0','h','j'}; و هنا ال \0 يعني بقوله يقف ف الاسترينج لحد هنا
//printf("s",s);    هنا ال %س ف بعاملها على انها سترينج
// char s[20];     هنا عشان اخد انبوت من اليوزر
// scanf("%s",s);    و هنا محتجتش احط ال& عشان السترنج عبارة عن بوينتر للتشار و البوينتر عباره عن&ا
// printf("%s",s);  هيطبع اللي هيدخله

//  programming ex===========================================================================================

// int main()
// {
//         int i,j;
//         for(i=0; j<4; i++)
//         {
//                 for (j=0; j<i+1; j++)
//                 {
//                         printf("#");
//                 }
//                 printf("\n");
//         }
//         for (i=0;i<5; i++)
//         {
//                 printf("#####\n");
//         }
//         for (i=0; i<4; i++)
//         {
//                 for (j=4-i; j>0; j--)
//                 {
//                         printf("#");
//                 }
//                 printf("\n");
//         }
// }

// ex program 2 =============================================================================================

// int main()
// {
//         for (int i=0; i<5; i++)
//         {
//                 for(int j=4-i; j<0; j++)
//                 {
//                         printf(" ");
//                 }
//                 for (int k=0; k<i+1; k++)
//                 {
//                         printf("#");
//                 }
//                 printf("\n");
//         }        
// }

// ex program 3 (calculating)=================================================================================
// here there are new libraries 

// #include <string.h>
// #define pi 3.14            we use it to find circumference of circle

// and there are some prototypes we'll use
// void add(void);
// void sub(void);
// void mul(void);
// void div(void);
// void circ(void);
// void area(void);
// int main()
// {
//         printf("welcome to the calculator\n\n");
//         int choice;
//         for(";;")
//         {
//                 printf("choose an order : \n");
//                 printf("1- add\n");
//                 printf("2- sub\n");
//                 printf("3- mul\n");
//                 printf("4- div\n");
//                 printf("5- circ\n");
//                 printf("6- area\n");
//                 printf("push any other key to exit\n\n");

//                 scanf("%d, &choice");
//                 if("choice == 1")
//                         add();
//                 else if("choice == 2")
//                         sub();
//                 else if("choice == 3")
//                         mul();
//                 else if("choice == 4")
//                         div();
//                 else if("choice == 5")
//                         circ();
//                 else if("choice == 6")
//                         area();
//                 else 
//                         break;
//         }
// }
// void add(void)
// {
//         float x,y;
//         printf("enter two num to sum : \n");
//         scanf("%f,&x");
//         scanf("%f,&y");
//         printf("%f\n",x+y);
// }
// void sub(void)
// {
//         float x,y;
//         printf("enter two num to sum : \n");
//         scanf("%f,&x");
//         scanf("%f,&y");
//         printf("%f\n",x-y);
// }
// void mul(void)
// {
//         float x,y;
//         printf("enter two num to sum : \n");
//         scanf("%f,&x");
//         scanf("%f,&y");
//         printf("%f\n",x*y);
// }
// void div(void)
// {
//         float x,y;
//         printf("enter two num to sum : \n");
//         scanf("%f,&x");
//         scanf("%f,&y");
//         printf("%f\n",x/y);
// }
// void circ(void)
// {
//         float r;
//         printf("enter the radius of the circle : \n");
//         scanf("%f,&r");
//         printf("%f\n",2*pi*r);
// }
// void area(void)
// {
//         float r;
//         printf("enter the radius of the circle : \n");
//         scanf("%f,&r");
//         printf("%f\n",pi*r*r);
// }

// debugging=================================================================================================

// int main()
// {
//         int i, n, result=1;
//         scanf("%d",&n);

//         for (i=1; i<n; i++)
//         {
//                 result*=i;
//         }
//         printf("%d",result);
//         return 0;
// }
// don't understand it at all=============================


// pointers============================================================================================================
// int main()
// {
//         int a;
//         a=1;

//         int*b;   * means that b is pointer point to int
//         b=(int*)malloc (sizeof(int));  malloc means that searching for space (memory a location)
// sizeof is a function give me size of parameter i want 
//         *b=2;

//         printf("%d %d \n",a ,*b);
// }

// difference between * &
// * means pointer to datatype (data of variable)
// & means the address of the variable



// functions and pointers together====================================================================================

// ex between swap and pointer:================

// void swapN(int* a, int* b);   swapN is a fuction that changes the data between variables 

// int main()
// {
//         int x=1, y=2;
//         printf("%d %d \n",x ,y);
//         swapN(&x , &y);   & here to call the address of variable
//         printf("%d %d \n",x ,y);
// }

// void swapN(int* a, int* b)
// {
//         int temp = *a;   temp here to copy data of a in it 
//         *a = *b;
//         *b = temp;
// }




// struct==============================================================================================================
// its function that i'll make by myself

// ex

// struct student
// {
//         char name[50];
//         int id;
//         float marks;
// };

// int main()
// {
//         struct student s;

//         printf("enter information of students:\n\n");

//         printf("enter name: ");
//         scanf("%s",s.name);

//         printf("enter id number: ");
//         scanf("%d",s.id);

//         printf("enter marks: ");
//         printf("%f",s.marks);

//         printf("\nDisplaying information\n");

//         printf("name: %s\n",s.name);
//         printf("id: %d\n",s.id);
//         printf("marks: %f\n",s.marks);
// }



// file I/O  (input /otput)==========================================================================================================================