package ������G226_03;

class Animal03{
	String name="è��";
	void shout(){
		System.out.println(name+"����è�䣡");
	}
}
class Dog03 extends Animal03{
	String name="Ȯ��";
	void shout(){
		super.shout();
	}
	void printname(){
		System.out.println(name+"��"+super.name+"�����ڶ���");	
	}
}

public class ExSuper1 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
	}
}