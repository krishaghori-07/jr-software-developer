/*write a program to print the table of  numbers.*/
#include<stdio.h>
void main()
{
    int num=5,i=1;
    do
    {
        printf("%d * %d=%d\n",num,i,num*i);
        i++;
    }
    while(i<=10);
}