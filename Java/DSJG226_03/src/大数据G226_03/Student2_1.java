package 大数据G226_03;

class StudentDY2_1{
	String name;
	int age;
	void print(String name1,int age1){
		System.out.println("年龄："+age1);
		System.out.println("姓名："+name1);
	}
}

public class Student2_1 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		StudentDY2_1 s;
		s = new StudentDY2_1();
		s.age = 20;
		s.name = "李嘉迪";
		s.print(s.name,s.age);

	}

}
