package ������G226_03;

class Father{
	public int value;
	public void f() {
		value=100;
		System.out.println("����ĳ�Ա������value="+value);
	}
}
class Child extends Father{
	public int value;
	public void f() {
		super.f();
		value=20;
		System.out.println("����ĳ�Ա������value="+value);
		System.out.print(value+"��");
		System.out.println(super.value);
	}
}
		
public class Example3_13 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Child c = new Child();
		c.f();
	}
}


