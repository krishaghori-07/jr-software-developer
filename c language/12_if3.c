/*write a program to find the frame is portrait,landscape,sqaure upon its width and height.
*/
#include<stdio.h>
void main()
{
    int length,width;
    printf("enter length:");
    scanf("%d",&length);
    printf("enter width:");
    scanf("%d",&width);
    if(length>width)
    {
        printf("the shape is portrait");
    }
    if(width>length)
    {
        printf("the shape is landscape");
    }
    if(width==length)
    {
        printf("the shape is square");
    }
}