#include<stdio.h>
//define union
union data
{
    int i;
    float f;
    char c;
};
void main()
{
    union data d;
    //assigning integer
    d.i=10;
    printf("integer value=%d\n",d.i);
    //assigning float
    d.f=5.5;
    printf("float value=%.2f\n",d.f);
    //assigning character
    d.c='A';
    printf("character value=%c\n",d.c);
}