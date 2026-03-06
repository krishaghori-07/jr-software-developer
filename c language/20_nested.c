#include<stdio.h>
void main()
{
    int num1,num2,choice;
    float result;
    printf("enter num1:");
    scanf("%d",&num1);
    printf("enter num2:");
    scanf("%d",&num2);
    printf("1.addition 2.substraction 3.division 4.multiplication");
    printf("enter your choice:");
    scanf("%d",&choice);
    if(choice>=1&&choice<=9)
    {
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
    printf("result=%.2f",result);
    }
}