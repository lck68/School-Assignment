package ´óÊý¾ÝG226_03;

public class Example2_19_2 {

	/**
	 * @param args
	 */
// ***
// **
// *
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int i=1,j,k;
		while(i<=8)
		{
			j=1;
			while(j<i)
			{
				System.out.print("");
				j++;
			}
			k=1;
			while(k<=2*(8-i)+1)
			{
				System.out.print("*");
				k++;
			}
			System.out.println("");
			i++;
		}

	}

}
