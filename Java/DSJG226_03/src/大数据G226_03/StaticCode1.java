package ������G226_03;

class Code1{
	static{
		System.out.println("1ִ����code1���еľ�̬�����");
	}
	{
		System.out.println("2ִ����code���е���ͨ�����");
	}
}
public class StaticCode1 {
	static{
		System.out.println("3ִ����code1���еľ�̬�����");
	}
	{
		System.out.println("4ִ����code1���е���ͨ�����");
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Code1 c1=new Code1();
		Code1 c2=new Code1();
		StaticCode1 s1=new StaticCode1();
		{
			System.out.println("5ִ�����������е���ͨ�����");
		}
	}

}
