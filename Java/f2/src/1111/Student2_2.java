package ������G226_03;

class StudentDY2_2{
	String name;
	int age;
	String getName(){
		return name;
	}
	void setName(String n){
		name = n;
	}
	int getAge(){
		return age;
	}
	void setAge(int a){
		age = a;
	}
}

public class Student2_2 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		StudentDY2_2 s = new StudentDY2_2();
		s.setAge(20);
		s.setName("��ѵ�");
		System.out.println("����Ϊ��"+s.getAge());
		System.out.println("����Ϊ��"+s.getName());

	}

}