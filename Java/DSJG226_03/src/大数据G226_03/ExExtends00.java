package ������G226_03;

class Animal{
	String name;
	void shout(){
	System.out.println(",���ֶ���Ľ����ǣ�����");
	}
}
class Dog extends Animal{
	public void printName(){
		System.out.print("name="+name);
	}
}
public class ExExtends00 {
	public static void main(String[] args) {
		Dog dog=new Dog();
		dog.name="ɳƤ��";
		dog.printName();
		dog.shout();
	}

}
