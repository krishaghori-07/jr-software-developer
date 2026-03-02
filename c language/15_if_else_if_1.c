#include<stdio.h>
void main()
{
    int month_number;
    printf("enter month_number:");
    scanf("%d",&month_number);
    if(month_number==1)
    {
        printf("thi is january");
    }
    else if(month_number==2)
    printf("this is february");
     else if(month_number==3)
    printf("this is march");
     else if(month_number==4)
    printf("this is april");
     else if(month_number==5)
    printf("this is may");
     else if(month_number==6)
    printf("this is june");
     else if(month_number==7)
    printf("this is july");
 else if(month_number==8)
    printf("this is augst");
     else if(month_number==9)
    printf("this is september");
     else if(month_number==10)
    printf("this is october");
     else if(month_number==11)
    printf("this is november");
     else if(month_number==12)
    printf("this is december");
    else
    {
        printf("invalid month_number");
    }

}