/*write a program to do addition,substraction,division,multipliaction by user choice.*/
#include<stdio.h>
void main()
{
    int num1,num2,choice;
    float result;
    printf("enter num1:");
    scanf("%d",&num1);
    printf("enter num2:");
    scanf("%d",&num2);
    printf("1.sum 2.substraction 3.division 4.multi");
    printf("\n enter your choice:");
    scanf("%d",&choice);
    switch(choice)
    {
        case 1:
        result=num1+num2;
        break;

        case 2:
        result=num1-num2;
        break;

        case 3:
        result=num1/num2;
        break;

        case 4:
        result=num1*num2;
        break;

        default:
        printf("invalid choice");
        break;
    }
    if(choice>=1&&choice<=4)
    {
        printf("result=%.2f",result);
    }
}