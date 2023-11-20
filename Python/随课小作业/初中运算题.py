# 输入x，平方再乘2再减4，若结果大于0则输出，否则循环运算。
x = int(input("输入x:"))
x = x**2*2-4
while True:
    if x < 0:
      x = x**2*2-4
    else:
      print("输出y:",x)
      break