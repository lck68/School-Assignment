package ������G226_03;

class Person033{
	public Person033(){
		System.out.println("�޲εĹ��췽���������ˡ�����");
	}
	public Person033(String name){
		this();
		System.out.println("�вεĹ��췽���������ˡ�����");
	}
	public Person033(String name,int age){
		this("aaa");
		System.out.println("���������Ĺ��췽���������ˡ�����");
	}
}
public class Exthis3 {
	public static void main(String[] args) {
		Person033 p=new Person033("����",18);

	}

}
