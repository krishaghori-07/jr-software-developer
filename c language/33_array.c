#include<stdio.h>
void main()
{
    int age[5];
    int position;
    for(position=0;position<=4;position++)
    {
        printf("enter %d student age",position+1);
        scanf("%d",&age[position]);
    }
    for(position=0;position<=4;position++)
    {
        printf("%d student age is %d\n",position+1,age[position]);
    }
}