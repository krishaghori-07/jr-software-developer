#include<stdio.h>
void main()
{
    int month_number;
    printf("enter month_number:");
    scanf("%d",&month_number);

    if(month_number==1)
        printf("this is january");
    if(month_number==2)
    printf("this is february");
    if(month_number==3)
    printf("this is march");
    if(month_number==4)
    printf("this is april");
    if(month_number==5)
    printf("this is may");
    if(month_number==6)
    printf("this is june");
    if(month_number==7)
    printf("this is july");
    if(month_number==8)
    printf("this is augest");
    if(month_number==9)
    printf("this is september");
    if(month_number==10)
    printf("this is october");
    if(month_number==11)
    printf("this is november");
    if(month_number==12)
    printf("this is december");
    if(month_number>12)
    printf("this is invalid number");
}