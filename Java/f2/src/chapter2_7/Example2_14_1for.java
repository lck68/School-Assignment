package chapter2_7;
// 10以内奇数和
public class Example2_14_1for {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int sum=0;
		for(int i=1;i<=10;i++){
			if (i%2!=0) sum+=i;
		}
		System.out.println("1+3+5+...+9的值为："+sum);
	}

}
