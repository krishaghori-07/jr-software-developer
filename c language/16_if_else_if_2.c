/*write a program to check the person have the fever or not.*/
#include<stdio.h>
void main()
{
    float fh;
    printf("enter your body temprature in farenhit:");
    scanf("%f",&fh);

    if(fh>=102.9)
    {
        printf("you have high fever");
    }
    else if(fh>=101.2&&fh<=102.8)
    {
        printf("you have fever");
    }
    else if(fh>=99.3&& fh<=101.1)
    {
        printf("you have low grade fever");
    }
    else{
        printf("you are normal")
    }

}