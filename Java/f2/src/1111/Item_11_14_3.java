package ������G226_03;

class Person2{
	int age;
	String name;
	public Person2(int a,String b){
		age = a;
		name = b;
	}
public void speak(){
	System.out.println("�ҵ�ѧ����"+age+"��");
	System.out.println("�ҵ�����"+name);
}
}
public class Item_11_14_3 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Person2 p1=new Person2(20,"������");
		p1.speak();

	}

}