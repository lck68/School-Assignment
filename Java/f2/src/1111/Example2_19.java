package ´óÊý¾ÝG226_03;

public class Example2_19 {

	/**
	 * @param args
	 */
//	  *
//   ***
//  *****
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int i=1,j,k;
		while(i<=5)
		{
			k=5-i;
			while(k>=1)
			{
				System.out.print(" ");
				k--;
			}
			j=1;
			while(j<=2*i-1)
			{
				System.out.print("*");
				j++;
			}
			System.out.println("");
			i++;
		}
		
	}

}
