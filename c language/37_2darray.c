#include<stdio.h>
void main()
{
    int a[2][2]={{5,10},{15,20}};
    int i,j,sum=0;
    for(i=0;i<2;i++)
    {
        for(j=0;j<2;j++)
        {
            sum=sum+a[i][j];
        }
    }
    printf("sum=%d",sum);
}