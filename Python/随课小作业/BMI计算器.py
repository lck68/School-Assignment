#这是一个BMI计算器
H=input('请输入身高：')
M=input('请输入体重：')
a=input('请输入小数位数：')
BMI=float(M)/(float(H)*float(H))
print('您的BMI为：',round(BMI,int(a)))