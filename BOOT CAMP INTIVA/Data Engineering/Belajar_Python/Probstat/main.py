import numpy as np
import matplotlib.pyplot as plt

data = np.random.normal(20000, 15000, 10000)
f1 = plt.figure(1)
plt.hist(data, 50)
f2 = plt.figure(2)
plt.hist(data, 100)

plt.show()