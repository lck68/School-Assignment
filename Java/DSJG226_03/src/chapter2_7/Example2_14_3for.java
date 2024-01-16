package chapter2_7;
// 10以内自然数乘积
public class Example2_14_3for {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int sum=1;
		for(int i=1;i<=10;i++){
			sum+=i;
		}
		System.out.println("1*2*3*...*10的值为："+sum);
	}

}
