package ������G226_03;

class Animal2{
	String name="è��";
	void shout(){
		System.out.println(this.name+"�Ľ����ǣ�����������������");
	}
}
class Cat extends Animal2{
	String name="����";
	void shout(){
		super.shout();
		System.out.println(this.name+"�Ľ����ǣ�����������");
	}
	void print(){
		System.out.println(this.name+"��"+super.name+"���ɰ�");
	}
}

public class ExSuperThis1 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Cat cat=new Cat();
		cat.shout();
		cat.print();
	}
}