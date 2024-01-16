package 大数据G226_03;

class StuDY1{
	static String schoolName;
	String name;
}

public class Item_2023_11_22_1 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		StuDY1.schoolName="辽宁建筑学院";
		StuDY1 stu1=new StuDY1();
		StuDY1 stu2=new StuDY1();
		stu1.name="王佳丽";
		stu2.name="李君";
		System.out.println("我是"+stu1.schoolName+"学生"+stu1.name);
		System.out.println("我是"+stu2.schoolName+"学生"+stu2.name);
		stu2.name="李嘉迪";
		System.out.println("我是"+StuDY1.schoolName+"学生"+stu2.name);
		stu1.schoolName="辽东学院";
		System.out.println("我是"+stu2.schoolName+"学生"+stu2.name);
		

	}

}
