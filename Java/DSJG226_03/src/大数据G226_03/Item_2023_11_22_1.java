package ������G226_03;

class StuDY1{
	static String schoolName;
	String name;
}

public class Item_2023_11_22_1 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		StuDY1.schoolName="��������ѧԺ";
		StuDY1 stu1=new StuDY1();
		StuDY1 stu2=new StuDY1();
		stu1.name="������";
		stu2.name="���";
		System.out.println("����"+stu1.schoolName+"ѧ��"+stu1.name);
		System.out.println("����"+stu2.schoolName+"ѧ��"+stu2.name);
		stu2.name="��ε�";
		System.out.println("����"+StuDY1.schoolName+"ѧ��"+stu2.name);
		stu1.schoolName="�ɶ�ѧԺ";
		System.out.println("����"+stu2.schoolName+"ѧ��"+stu2.name);
		

	}

}
