#include <stdio.h>

float calculatePercentage(int m1, int m2, int m3, int m4, int m5)
{
    int total = m1 + m2 + m3 + m4 + m5;
    float percentage = (total / 500.0) * 100;
    return percentage;
}

int main()
{
    int s1, s2, s3, s4, s5;

    printf("Enter marks of 5 subjects: ");
    scanf("%d %d %d %d %d", &s1, &s2, &s3, &s4, &s5);

    float result = calculatePercentage(s1, s2, s3, s4, s5);

    printf("Percentage = %.2f%%\n", result);

    return 0;
}