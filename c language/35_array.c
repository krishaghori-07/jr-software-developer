/*write a program to sort decending array
(0,1,2,3,4)
*/
#include<stdio.h>
void main()
{
    int a[5]={10,20,30,40,50};
    int b[5];
    int top,bottom;
    for(top=0,bottom=4;top<=4;bottom--,top++)
    {
        b[top]=a[bottom];
    }
    for(int i=0;i<=4;i++)
    {
        printf("%5d",a[i]);
    }
    printf("\n");
    for(int i=0;i<=4;i++)
    {
        printf("%5d",b[i]);
    }
}