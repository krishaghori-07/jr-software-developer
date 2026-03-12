/*sum of given array number*/
#include<stdio.h>
void main()
{
    int number[5]={5,6,7,8,9};
    int i,sum=0;
    for(i=0;i<=4;i++)
    {
        sum=sum+number[i];
    }
    printf("sum %d",sum);
}