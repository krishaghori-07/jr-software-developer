/*write a program to findout the given year is leap year or not.
steps:
------------------------------------------------------------------
create variable year,reminder1,reminder2,reminder3;
accept input from user
-> calculate the year is leap year
reminder1=year%4;
reminder2=year%100;
reminder3=year%400;
if(reminder1==0&&reminder2!=0)
{
    printf("given year is leap year");
}
    else
{
    if(reminder1==0&&remider3==0)
    {
        printf("this year is leap year");
    }
    else
{
    printf("this is not leap year");}
    }
    
*/
#include<stdio.h>
void main()
{
    int year,reminder1,reminder2,reminder3;
    printf("enter year:");
    scanf("%d",&year);
    reminder1=year%4;
    reminder2=year%100;
    reminder3=year%400;
    if(reminder1==0&&reminder2!=0)
    {
        printf("this year is leap year");
    }
    else{
        if(reminder1==0&&reminder3==0){
            printf("this is leap year");
        }
        else{
            printf("this is not leap year");
        }

    }
}