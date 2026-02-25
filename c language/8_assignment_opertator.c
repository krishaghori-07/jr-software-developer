#include<stdio.h>
void main()
{
    int a,b;
    printf("enter value of a:");
    scanf("%d",&a);
    printf("enter value of b:");
    scanf("%d",&b);
    a+=b;
    printf("a is:%d",a);
    a-=b;
    printf("\n a is:%d",a);
    a*=b;
    printf("\n a is:%d",a);
    a/=b;
    printf("\n a is:%d",a);
}