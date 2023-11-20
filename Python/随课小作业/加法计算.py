#这是写的第二个程序
#这是个加法计算器
print('请输入a项')
a = input("a为:")
print('请输入b项')
b = input("b为:")
c=float(a)+float(b)
print('计算结果为:',float(a),'+',float(b),'=',float(c))

#2022.11.13 新增的一个，通过定义函数的方式计算加法
def plus(a,b):
  c = a + b
  return(c)

a = float(input("请输入a："))
b = float(input("请输入b：")) 
print("计算结果为：",plus(a,b))