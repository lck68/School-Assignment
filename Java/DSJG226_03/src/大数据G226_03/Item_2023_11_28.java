package ������G226_03;

class Person0{
	int age;
	String name;
	public Person0(){}
	public Person0(String n,int a){
		name=n;
		age=a;
	}
	void action(){
		System.out.println(name+"��������"+age+",��ÿ����ºܶ�����");
	}
}
class Employee extends Person0{
	String name;
	public Employee(){}
	public Employee(String n,int a){
		name=n;
		age=a;
	}
}
class Student0 extends Person0{
	public Student0(String n,int a){
		name=n;
		age=a;
	}
	void action(){
		System.out.println(name+"��������"+age+",��ÿ��һ��������������ѧ��");
	}
}
public class Item_2023_11_28 {
	public static void main(String[] args) {
		Person0 p=new Person0("��ΰ",23);
		p.action();
		Employee e=new Employee("����",35);
		e.action();
		Student0 s=new Student0("������",15);
		s.action();
	}

}
