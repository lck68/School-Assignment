package dsj_2023_10_11;

public class ziranshu_dowhile {
//5以内自然数乘积
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int sum=1,i=1;
		do
		{
			sum*=i;
			i++;
		}while(i<=5);
		System.out.println("1*2*3*...*5="+sum);

	}

}
