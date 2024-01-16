package 大数据G226_03;

class Person0{
	int age;
	String name;
	public Person0(){}
	public Person0(String n,int a){
		name=n;
		age=a;
	}
	void action(){
		System.out.println(name+"的年龄是"+age+",他每天从事很多人类活动");
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
		System.out.println(name+"的年龄是"+age+",他每周一到周六正常上下学。");
	}
}
public class Item_2023_11_28 {
	public static void main(String[] args) {
		Person0 p=new Person0("李伟",23);
		p.action();
		Employee e=new Employee("王红",35);
		e.action();
		Student0 s=new Student0("张玲玲",15);
		s.action();
	}

}
