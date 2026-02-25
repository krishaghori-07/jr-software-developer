#include<stdio.h>
void main()
{
    int a=5,b=0;
    b=a++;
    printf("a=%d b=%d",a,b);
    b=--a;
    printf("a=%d b=%d",a,b);
}