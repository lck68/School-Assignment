package 大数据G226_03;

class Code1{
	static{
		System.out.println("1执行了code1类中的静态代码块");
	}
	{
		System.out.println("2执行了code类中的普通代码块");
	}
}
public class StaticCode1 {
	static{
		System.out.println("3执行了code1类中的静态代码块");
	}
	{
		System.out.println("4执行了code1类中的普通代码块");
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Code1 c1=new Code1();
		Code1 c2=new Code1();
		StaticCode1 s1=new StaticCode1();
		{
			System.out.println("5执行了主方法中的普通代码块");
		}
	}

}
